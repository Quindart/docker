FROM golang:1.21-alpine

WORKDIR /app

COPY . .

RUN go mod tidy
RUN go build -o my-go-app .

EXPOSE 8080

CMD ["./my-go-app"]
