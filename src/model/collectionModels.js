var  collectionModels = Backbone.Collection.extend({
    url: '/lib/ajax_function.php',
    comparator: function(chapter) {
        return chapter.get("_id");
    }
});
export {collectionModels};