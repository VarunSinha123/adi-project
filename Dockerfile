FROM node:alpine3.10

WORKDIR /app

COPY . .

RUN npm install

EXPOSE 80

CMD ["node", "app.js"]
