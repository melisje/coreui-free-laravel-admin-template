module.exports = (function (undefined)
{
    if (typeof ($.fn.jquery) !== 'undefined')
    {
        console.log('+-> Using JQuery', $.fn.jquery, '...');
    }

    if (typeof ($.fn.tooltip) !== 'undefined')
    {
        console.log('+-> Using Bootstrap', $.fn.tooltip.Constructor.VERSION, '...');
    }

    if (typeof ($.fn.dataTable) !== "undefined")
    {
        console.log('+-> Using Datatables', $.fn.dataTable.version, " ...");
    }

    if (typeof (ko) !== 'undefined')
    {
        console.log('+-> Using KnockoutJS', ko.version, "...");
    }

    if (typeof (feather) !== 'undefined')
    {
        console.log('+-> feather-icons available ');
    }

})(undefined);

