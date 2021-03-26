//Reset Passwword
function check_repass()
{
    var arr = document.getElementsByTagName('input');
    var passold = arr[0].value;
    var passnew = arr[1].value;
    var repassnew = arr[2].value;
    if(passnew == repassnew ){
        alert("Thay đổi mật khẩu thành công");
        return;
    }
    else(){
        alert("Nhắc lại mật khẩu sai ! Vui lòng nhập lại");
        return;
    }
}