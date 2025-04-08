Sử dụng Docker multi-stage để:

- ✅ Build app bằng Node.js + TypeScript (Stage 1)
- ✅ Chạy app bằng Node.js Alpine (Stage 2)
- ✅ Tối ưu kích thước image, tăng tốc độ deploy
- ✅ Bảo mật: không để lộ source TypeScript hay file dev
