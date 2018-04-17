import  {collectionModels} from './model/collectionModels';
import  {mainModel} from './model/mainModel';
import {viewMain} from './view/viewMain';

$(function()
{
    var modelT = new mainModel();
    var collection  = new collectionModels();
    var viewT = new viewMain({
        model: modelT,
        el: '.innerTable',
        collection : collection
    });
});