document.addEventListener("DOMContentLoaded", function() {
  // إنشاء الغيوم الديناميكية
  const numClouds = Math.floor(window.innerWidth / 400); // تعديل حسب الحاجة
  const cloudsContainer = document.getElementById("clouds-container");

  for (let i = 0; i < numClouds; i++) {
    const cloud = document.createElement("div");
    cloud.className = "cloud";
    cloud.style.top = `${Math.random() * 300}px`; // تعديل حسب الحاجة
    cloud.style.left = `${Math.random() * 100}%`; // تعديل حسب الحاجة
    cloudsContainer.appendChild(cloud);
  }
});
