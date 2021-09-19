const swiper1 = new Swiper(".topSwiper", {
  speed: 1800, // スライドが切り替わる時の速さ
  slidesPerView: "1", // スライド表示数
  loop: true, // ループさせる
  spaceBetween: 22,
  autoplay: {
    // 自動再生 ON
    delay: 8000, // 次のスライドまでの秒数
    disableOnInteraction: false, //スライダー操作後、自動再生が止まるかどうか
  },
  pagination: {
    el: ".topSwiper-pagination",
  },
});

const swiper2 = new Swiper(".aboutSwiper", {
  speed: 1800, // スライドが切り替わる時の速さ
  slidesPerView: "1", // スライド表示数
  loop: true, // ループさせる
  spaceBetween: 72,
  autoplay: {
    // 自動再生 ON
    delay: 8000, // 次のスライドまでの秒数
    disableOnInteraction: false, //スライダー操作後、自動再生が止まるかどうか
  },
  pagination: {
    el: ".aboutSwiper-pagination",
  },
  breakpoints: {
    400: { slidesPerView: "2", spaceBetween: 20 },
    750: { slidesPerView: "3", spaceBetween: 24 },
  },
});
