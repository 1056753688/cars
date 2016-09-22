$(function(){
	

function init(){
        var map = new AMap.Map('container', {
            center: [117.000923, 36.675807],
            zoom: 6
        });
        map.plugin(["AMap.ToolBar"], function() {
            map.addControl(new AMap.ToolBar());
        });
    }   

	
})
