(()=>{$(document).on("click",".remember",(function(){0==$("#remember").val()?($("form > .remember > .icon > i").stop(!0,!0).fadeIn(),$("#remember").val(1)):($("form > .remember > .icon > i").stop(!0,!0).fadeOut(),$("#remember").val(0))}));var t=function(t,e,i){this.toRotate=e,this.el=t,this.loopNum=0,this.period=parseInt(i,10)||2e3,this.txt="",this.tick(),this.isDeleting=!1};t.prototype.tick=function(){var t=this.loopNum%this.toRotate.length,e=this.toRotate[t];this.isDeleting?this.txt=e.substring(0,this.txt.length-1):this.txt=e.substring(0,this.txt.length+1),this.el.innerHTML='<span class="wrap">'+this.txt+"</span>";var i=this,s=300-100*Math.random();this.isDeleting&&(s/=2),this.isDeleting||this.txt!==e?this.isDeleting&&""===this.txt&&(this.isDeleting=!1,this.loopNum++,s=500):(s=this.period,this.isDeleting=!0),setTimeout((function(){i.tick()}),s)},window.onload=function(){for(var e=document.getElementsByClassName("txt-rotate"),i=0;i<e.length;i++){var s=e[i].getAttribute("data-rotate"),n=e[i].getAttribute("data-period");s&&new t(e[i],JSON.parse(s),n)}var o=document.createElement("style");o.type="text/css",o.innerHTML=".txt-rotate > .wrap { border-right: 0.08em solid #fff }",document.body.appendChild(o)}})();