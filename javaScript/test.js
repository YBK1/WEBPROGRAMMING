var body = {
    setColor:function(color){
        var list = document.querySelectorAll('a');
        for(var i = 0; i < list.length; i++){
                list[i].style.color=color;
        }
    }
}
var Links = {
    toggle:function(self){
        var target = document.querySelector('body');
        if(target.style.backgroundColor=='black'){
            target.style.backgroundColor='white';
            target.style.color='black';
            self.value='day';
            body.setColor('black')
        }
        else{
            target.style.backgroundColor='black';
            target.style.color='white';
            self.value='night';
            body.setColor('powderblue');
        }
    }
}