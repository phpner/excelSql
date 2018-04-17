import {ViewTr} from './viewTr';
var  viewMain =  Backbone.View.extend({
    events: {
    },

    initialize :function () {
        this.td = $('table tr td');
        this.tr = $('table tr');
        this.listenTo(this.collection,'change',this.rerender);
        this.render();
    },
    render: function () {
        this.$el.html(this.template);
        this.addToCollection();
        this.addEventsToTr();
        this.addEventsToClickOk();
    },
    addEventsToClickOk :function (){
        var self  = this;
        $(document).on('click',".click-ok",function () {
            var val = $(event.target).parent().siblings('input').val();
            var id = $(event.target).parent().siblings('input').attr('id');
            var model = self.collection.get(id);
            model.set({value:val});
        });
    },
    addToCollection: function () {
        for (let i = 0; i< this.td.length;i++){
            this.collection.add({id: i,value: `${$(this.td[i]).text()}`});
        }
    },
    addEventsToTr: function () {

           for (let i = 0; i < $('table tr td').length; i++){
                var ck = $('table tr td')[i];
                $(ck).on('click',function () {
                    let _this = $(this);
                    if (!_this.has( "input" ).length){
                        _this.html("<div class='input-group'><input class='form-control col-md-2' type='text' id='"+i+"' value='"+ _this.text()+"'></input><span class='input-group-btn'><button class='btn btn-success click-ok'>Ok</button><button class='btn btn-danger'>Отмена</button></span></div>")
                    }
            })
        }
    },
    rerender(){
        var viewtr = new ViewTr({collection : this.collection,viewM: this});
    }

});
export {viewMain};