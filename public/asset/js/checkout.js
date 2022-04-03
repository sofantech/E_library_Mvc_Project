const slidePage = document.querySelector(".slide-page");
let update_basket=document.getElementById(`update-basket`);
update_basket.addEventListener("click",()=>{
  location.href="https://sofantech.github.io/E-library-project/steper.html";
});
window.onload=function () {
  const cartboxlist=document.getElementById("basket-list");
  let tabledata=``;

  if (JSON.parse(localStorage.getItem('items'))[0] === null) 
  { 
  }
  else
  {
    JSON.parse(localStorage.getItem('items')).map(data=>{
      cartboxlist.insertAdjacentHTML("beforeend",`
      <div class="box">
      <div class="top-card">
    <div class="image">
    <img src="images/light.jfif">
    </div>
    <div class="content">
    <span>${data.id}</span>
    <h2>${data.name}</h2>
    <p>منتج قابل للخصم</p>
    <div class="notes">
        <span class="note">ملاحظة :</span>
        <span class="txt">هذا المنتج رقمي و سيتم توصيلة من خلال البريد الالكتروني</span>
        <a href="#">كيفية الحصول على المنتج</a>
    </div>
    </div>
    <div class="count">
    <h3>${data.prise}</h3>
    <div class="counter">
        <input type="number">
        <!-- <div class="control-btn">
        <span>+</span>
        <span>-</span>
        </div> -->
    </div>
    </div>
  </div>
  <div class="delete-btn" onclick=Delete(this);>
    <i class="ri-add-circle-fill"></i>
    <span>احذف</span>
  </div>
  </div>`);

    });
    
  }
  
};