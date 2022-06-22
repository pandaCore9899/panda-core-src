import $ from "jquery";
function dropdownSidebar(element: HTMLElement) {
    let divClick = $(element);
    let divContainer = divClick.next();
    let icon = divClick.children('.panda-dropdown-sidebar-icon').eq(0).children();
    let icon_text = icon.text()
    let after_icon = ''
    if (icon_text == "chevron_right") {
        after_icon = "expand_more"
    } else {
        after_icon = "chevron_right"
    }
    $('.panda-dropdown-sidebar-icon').children().text("chevron_right")
    icon.text(after_icon);
    var panel = <HTMLElement>element.nextElementSibling;
    let containers = $('.panda-dropdown__container').not(divContainer);
    containers.removeClass('panda-sidebar__selected')
    console.log(panel.style.maxHeight);
    console.log($(panel).css('max-height'))
    if ($(panel).hasClass('panda-sidebar__selected')) {
        // $(panel).attr('style','max-height:0px !important');
        // console.log('set to null')
        // panel.style.maxHeight = null;
        $(panel).removeClass('panda-sidebar__selected')
    } else {
        $(panel).addClass('panda-sidebar__selected')
    }
}
export default { dropdownSidebar };