var ViewTr = Backbone.View.extend({
    initialize : function (param) {
        this.collection = param.collection;
        this.viewM =     param.viewM;
        this.el = $('.viewExelTabel');
        this.render();

    },
    render(){

        var td = $('.innerTable tr td');
        var tr = $('.innerTable tr');
        var tbody = $('tbody').html('');
        var count = this.collection.length -1;
        var co =0;

            for (var t = 0; t < tr.length; t++) {
                $(tbody).append("<tr></tr>>");
                for (var i = 0; i < td.length / tr.length; i++) {
                    var model = this.collection.get(co);
                    count--;
                    co++;
                    $('tbody tr:last').append(" <td class='col-md-2 colectionTr'>" + model.toJSON().value + "</td>");

                    }

            }
            this.viewM.addEventsToTr();
    }
});
export {ViewTr};