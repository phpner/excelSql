import  {collectionModels} from './model/collectionModels';
import  {mainModel} from './model/mainModel';
import {viewMain} from './view/viewMain';

$(function()
{
    Backbone.Collection.prototype.save = function (options) {
        Backbone.sync("create", this, options);
    };
    Backbone.emulateHTTP = true;
    Backbone.emulateJSON = true;

    var modelT = new mainModel({url: "../../class/excel_phpner.php"});
    var collection  = new collectionModels();
    var viewT = new viewMain({
        model: modelT,
        el: '.innerTable',
        collection : collection
    });
});