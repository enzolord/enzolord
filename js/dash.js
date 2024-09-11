const allDropdown= document.querySelectorAllsidebar .side-dropdown');
allDropdown.forEach(item=>{
    const a=item.parentElement.querySelector('a:first-child');
    a.addEventListener('click', funtion (e)){
          e.preventDefault();
          this.classList.toggle('active');
          
    }
})