/**
 * 加了window.onload 后，直接引入js文件即可
 * 页面资源全部加载完毕后会自动调用window.onload里的回调函数
 */
window.addEventListener("load",function(){
    console.log("我是外部js test1");
})
