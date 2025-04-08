# 📦 Các lệnh cơ bản thao tác với Docker

## 1. Kiểm tra và khởi động
| Lệnh | Mô tả |
|------|------|
| `docker --version` | Kiểm tra version Docker |
| `docker run hello-world` | Khởi chạy container từ image |
| `docker pull nginx` | Tải image của Nginx về máy |
| `docker images` | Hiển thị danh sách image |
| `docker ps` | Hiển thị container đang chạy |
| `docker ps -a` | Hiển thị tất cả container |

## 2. Tạo và quản lý container
| Lệnh | Mô tả |
|------|------|
| `docker run -d nginx` | Tạo container từ image Nginx |
| `docker stop <container_id>` | Dừng container |
| `docker restart <container_id>` | Khởi động lại container |
| `docker rm <container_id>` | Xoá container |
| `docker container prune` | Xoá tất cả container không còn sử dụng |
| `docker run -d --name my_nginx nginx` | Tạo container từ Nginx và đặt tên là `my_nginx` |

## 3. Quản lý image
| Lệnh | Mô tả |
|------|------|
| `docker rmi <image_id>` | Xoá image khỏi máy |
| `docker image prune -a` | Xoá tất cả image không còn sử dụng bởi container nào |

## 4. Log và truy cập container
| Lệnh | Mô tả |
|------|------|
| `docker logs <container_id>` | Hiển thị lịch sử hoạt động container |
| `docker logs -f my_nginx` | Theo dõi và hiển thị log đầu ra theo thời gian thực |
| `docker exec -it <container_id> /bin/sh` | Truy cập terminal bên trong container |
| `docker inspect <container_id>` | Xem thông tin chi tiết container |

## 5. Port & Volume
| Lệnh | Mô tả |
|------|------|
| `docker run -d -p 8080:80 nginx` | Mở port 8080 máy host - ánh xạ với port 80 container |
| `docker run -d -v mydata:/data nginx` | Gắn volume `mydata` vào container |
| `docker volume ls` | Liệt kê tất cả volumes |
| `docker volume prune` | Xoá tất cả volumes không còn sử dụng |

## 6. Mạng (network)
| Lệnh | Mô tả |
|------|------|
| `docker network ls` | Liệt kê các mạng Docker |
| `docker network create my_network` | Tạo mạng Docker mới |
| `docker run -d --network my_network --name my_container nginx` | Tạo container và kết nối mạng |
| `docker network connect my_network my_nginx` | Kết nối container vào mạng đã tạo |

## 7. Biến môi trường
| Lệnh | Mô tả |
|------|------|
| `docker run -d -e MY_ENV=hello_world nginx` | Tạo container với biến môi trường `MY_ENV` |

## 8. Thống kê
| Lệnh | Mô tả |
|------|------|
| `docker stats` | Hiển thị thông tin thời gian thực các container |

## 9. Dockerfile & Build Image
```Dockerfile
# Dockerfile ví dụ
FROM nginx
COPY index.html /usr/share/nginx/html/index.html
