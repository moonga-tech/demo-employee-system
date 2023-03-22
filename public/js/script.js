/* javascript */
$(document).ready(() => {
    $("#navbarDropdown").click(() => {
        $(".dropdown-menu-right").toggle(400);
    });
    
    $("#parent").click(() => {
        $("#name").attr("placeholder", "Parent-Name");
    })
    $("#student").click(() => {
        $("#name").attr("placeholder", "Student ID");
    });
    
    $("#toggle").click(() => {
        $("#navbarSupportedContent").toggle(400)
    })
});

/* let approve = document.querySelectorAll("#approve");
for(i=0; i<approve.length; i++) {
    let approvedLoop = approve[i];
    approvedLoop.addEventListener("click", () => {
        pending.innerHTML = "";
    });
}
let pending = document.querySelectorAll("#pending");
for(i=0; i<pending.length; i++) {
    let pendingLoop = pending[i];
    pendingLoop.addEventListener("click", () => {
        alert("dfsdf")
    });
} */

/* Ajax */
/* async function res() {
    let dp = document.querySelector('#dp')
let xhr = new XMLHttpRequest;
let div = document.querySelector('.sections-div')
dp.addEventListener('click', ()=>{
div.innerHTML = "<div><h1>hello</h1></div>"
console.log('hello')*/

/* let staffMember = document.querySelector('#staff_member')
let xhr = new XMLHttpRequest;
let div = document.querySelector('.sections-div')

staffMember.addEventListener('click', () => {
    xhr.onload = function() {
        if(xhr.status === 200) {
            div.innerHTML = xhr.responseText 
            console.log('hello')
        } else {
            div.innerHTML = 'Page Didnt Load'
        }
    }
    xhr.open('get', '/../resources/views/staff_tables/chancellor.blade.php', true)
    xhr.send()
})

console.log(staffMember) */