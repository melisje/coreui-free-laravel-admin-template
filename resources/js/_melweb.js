(function (_this, $, undefined)
{
    //Private Property
    var version = '0.0.1';

    //Public Property
    _this.confirmButtonColor = '#aed6f1';//'#3085d6',
    _this.cancelButtonColor = '#eaeaea'; // '#d33',

    //Public Method
    _this.fireConfirm = function (title, text)
    {
        return Swal.fire({
            title: title,
            text: text,
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: _this.confirmButtonColor,
            cancelButtonColor: _this.cancelButtonColor,
            confirmButtonText: 'Yes, please!'
        })
    };

    _this.fire = function (title, text, icon)
    {
        return Swal.fire({
            icon: icon,
            title: title,
            text: text,
            confirmButtonColor: _this.confirmButtonColor, //'#3085d6',
            // footer: '<a href>Why do I have this issue?</a>'
        })
    };

    _this.fireSuccess = function (title, text)
    {
        _this.fire(title, text, 'success');
    };

    _this.fireError = function (title, text)
    {
        _this.fire(title, text, 'error');
    };

    //Private Method
    function demo(item)
    {
        if (item !== undefined) {
            console.log("Adding " + $.trim(item));
        }
    }

}(window.MELWEB = window.MELWEB || {}, jQuery));
