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
        this.addToCollection();
        this.addEventsToTr();
        this.addEventsToClickOk();
        this.addEventsToCancel();
    },
    addEventsToClickOk :function (){
        var self  = this;
        $(document).on('click',".click-ok",function (event) {
            var val = $(event.target).parent().siblings('input').val();
            var id = $(event.target).parent().siblings('input').attr('id');
            var model = self.collection.get(id);
            model.set({value:val});
            self.collection.save({name: 'tr'});
            console.log(model.save());
           /* model.save();*/
        });
    },
    addEventsToCancel: function(){
        var self  = this;
        $(document).on('click',".click-cancel",function (event) {
            var id = $(event.target).parent().siblings('input').attr('id');
            var mod = self.collection.get(id);
            var td = $(event.target).parent().parent().parent('td').append(mod.toJSON().value);
            var div = $(event.target).parent().parent('div').remove();
            console.log(mod.toJSON().value);
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
                        _this.html("<div class='input-group'><input class='form-control col-md-2' type='text' id='"+i+"' value='"+ _this.text()+"'></input><span class='input-group-btn'><button class='btn btn-success click-ok'>Ok</button><button class='btn btn-danger click-cancel'>X</button></span></div>")
                    }
            })
        }
    },
    rerender(){
        var viewtr = new ViewTr({collection : this.collection,viewM: this});
    }

});
export {viewMain};