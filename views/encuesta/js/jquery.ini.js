//Parte de la paginacion virtual
/*
var pagecontent=new virtualpaginate({
 piececlass: "virtualpage", //class of container for each piece of content
 piececontainer: "div", //container element type (ie: "div", "p" etc)
 pieces_per_page: 1, //Pieces of content to show per page (1=1 piece, 2=2 pieces etc)
 defaultpage: 0, //Default page selected (0=1st page, 1=2nd page etc). Persistence if enabled overrides this setting.
 wraparound: false,
 persist: true //Remember last viewed page and recall it when user returns within a browser session?
})
pagecontent.buildpagination(["paginatediv"])
*/
var gallery=new virtualpaginate({
	piececlass: "virtualpage", //class of container for each piece of content
	piececontainer: 'div', //container element type (ie: "div", "p" etc)
	pieces_per_page: 1, //Pieces of content to show per page (1=1 piece, 2=2 pieces etc)
	defaultpage: 0, //Default page selected (0=1st page, 1=2nd page etc). Persistence if enabled overrides this setting.
	persist: true //Remember last viewed page and recall it when user returns within a browser session?
});

gallery.buildpagination(["gallerypaginate", "gallerypaginate2"]);