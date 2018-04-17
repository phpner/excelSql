var  collectionModels = Backbone.Collection.extend({
    comparator: function(chapter) {
        return chapter.get("_id");
    }
});
export {collectionModels};