let home_page=document.getElementById("home-page");
let login=document.querySelector("#login");
let modal_login=document.querySelector("#modal-login");
let close_login=document.querySelector("#close-btn");
let signin=document.querySelector("#signin");
let modal_signin=document.querySelector("#modal-signin");
let close_signin=document.querySelector("#close-signin-btn");
let category_order_rigth=document.getElementById("category-order-rigth");
let category_order_left=document.querySelector("#category-order-left");
let category_list=document.querySelector("#category-list");
let count_down_date=new Date("Dec 31, 2022 23:59:59").getTime();
let prise_box=document.querySelector("#price-content");
let show_prise_btn=document.querySelector("#show-prise");
let togle_menu=document.querySelector(".header #togle-menu");
let menu_list=document.querySelector(".header .top-header #menu_list");
let boxList=document.querySelectorAll(".box-wrapper .box");
let categoryList=document.querySelectorAll("#category-list .category-box");
console.log(categoryList);
categoryList.forEach((e)=>{
    e.onclick=function () {
        location.href="https://sofantech.github.io/E-library-project/category.html";   
    }
});
boxList.forEach((e)=>{
    e.onclick=function () {
        location.href="https://sofantech.github.io/E-library-project/details.html";
    }
})
togle_menu.onclick=function () {
    menu_list.classList.toggle("active");
    
}
//adding data to local storage
const addtocartbtn=document.getElementsByClassName("shopping-basket");
// let no =JSON.getItem()
let items=[];
for (let i = 0; i < addtocartbtn.length; i++) {
    
    addtocartbtn[i].addEventListener("click",(e)=>{
        console.log(e.target.parentElement.parentElement.parentElement.children[2].children[0].textContent);
        if (typeof(Storage) !== 'undefined') {
            let item =
            {
                id:i +1,
                name:e.target.parentElement.parentElement.parentElement.children[1].children[1].textContent,
                prise:e.target.parentElement.parentElement.parentElement.children[2].children[0].textContent,
                no:1

            };
            

            if (JSON.parse(localStorage.getItem(`items`)) === null) {
                items.push(item);
                localStorage.setItem("items",JSON.stringify(items));
                window.location.reload();
                
            }
            else
            {
                const localItems=JSON.parse(localStorage.getItem("items"));
                localItems.map(data=>{
                    if (item.id == data.id) {
                        item.no=data.no +1;
                        console.log(item);
                        
                    }
                    else
                    {
                        items.push(data);
                    }
                   
                    
                });
                items.push(item);
                localStorage.setItem('items',JSON.stringify(items));
                window.location.reload();
                
            }
            
        }
        else
        {
            console.log(`storage not working in your browser`);
        }

    });
}
//adding data to cart
const iconshoping=document.querySelector(".basket .conter");
let no=0;
JSON.parse(localStorage.getItem('items')).map(data=>{
    no=no +data.no;
    
});
iconshoping.innerHTML=no;
//click on basket btn
let basketBtn=document.querySelector('.basket');
basketBtn.addEventListener("click",()=>{
    location.href="https://sofantech.github.io/E-library-project/checkout.html";
});

//adding data to cart
// const cartboxlist=document.querySelector('.basket-container .basket-list');
// console.log(cartboxlist);

const search=()=>{
    const searchBox=document.getElementById("search-items").value;
    const storeitem=document.getElementById("box-wrapper");
    const product=document.querySelectorAll(".box");
    const pname=document.getElementsByTagName("span");
    for (var i = 0; i < pname.length; i++) {
        let match=product[i].getElementsByTagName("span")[0];
        if (match) {
            let textvalue=match.textContent || match.innerHTML;
            console.log(textvalue);
            if (textvalue.indexOf(searchBox) > -1) {
                product[i].style.display="";
                
            }
            else
            {
                product[i].style.display="none";
            }
            
        }
        
    }
};
// category counter

let counter=setInterval(()=>{
    let datenwo=new Date().getTime();
    let datediff=count_down_date - datenwo;
    // let days=Math.floor(datediff/1000*60*60*24);
    let hours=Math.floor((datediff % (1000 * 60 * 60 * 24))/(1000*60*60));
    let minut=Math.floor((datediff % (1000*60*60)) / (1000 *60));
    let second=Math.floor((datediff % (1000*60)) /1000);
    

    // document.querySelectorAll(".day").forEach((e)=>{
    //     e.innerHTML=days;

    // });
    document.querySelectorAll(".houre").forEach((e)=>{
        e.innerHTML=hours;

    });
    document.querySelectorAll(".minute").forEach((e)=>{
        e.innerHTML=minut;

    });
    document.querySelectorAll(".second").forEach((e)=>{
        e.innerHTML=second;

    });
    if (datediff <0) {
        clearInterval(counter);
        
    }
},1000);
login.onclick=function () {
    modal_signin.classList.remove("active");
    modal_login.classList.add("active");
}
close_login.onclick=function () {
    modal_login.classList.remove("active");
    
}

signin.addEventListener("click",()=>{
    modal_login.classList.remove("active");
    modal_signin.classList.add("active");
});
close_signin.addEventListener("click",()=>{
    modal_signin.classList.remove("active");
});
window.onscroll=function () {
    modal_login.classList.remove("active");
    modal_signin.classList.remove("active");
    menu_list.classList.remove("active");
    
}
category_order_left.onclick=function () {
    category_list.style.marginRight="0%";
    margin_left_cound+="100%";
    
}
category_order_rigth.onclick=function () {
    category_list.style.marginRight="-100%";
    
}
console.log(show_prise_btn);
console.log(prise_box);
show_prise_btn.onclick=function () {
    prise_box.classList.toggle("hidden");
    
}

