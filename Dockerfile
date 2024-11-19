# Build stage
FROM node:18-alpine as builder

# Set the working directory
WORKDIR /app

# Copy package files and install dependencies
COPY package*.json ./
RUN npm install

# Copy the application source code
COPY . .

# Build the application
RUN npm run build

# Production stage
FROM node:18-alpine

# Set the working directory
WORKDIR /app

# Copy build output from the builder stage
COPY --from=builder /app/build ./build

# Install the `serve` package globally to serve the build
RUN npm install -g serve

# Expose the port
EXPOSE 3000

# Serve the application
CMD ["serve", "-s", "build", "-l", "3000"]
