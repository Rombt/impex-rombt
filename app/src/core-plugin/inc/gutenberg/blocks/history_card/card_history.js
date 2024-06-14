(function (blocks, editor, element) {
  var el = element.createElement;

  blocks.registerBlockType('rmbt/history-card', {
    title: 'History card ',
    icon: 'index-card',
    category: 'common',
    attributes: {
      title: {
        type: 'string',
        default: 'Block Title',
      },
    },
    edit: function (props) {
      var attributes = props.attributes;
      var setAttributes = props.setAttributes;
      return el(
        'div',
        {
          className: props.className,
        },
        el('h3', {}, attributes.title)
      );
    },
    save: function (props) {
      var attributes = props.attributes;
      return el(
        'div',
        {
          className: 'rmbt-history-card',
        },
        el('h3', {}, attributes.title)
      );
    },
  });
})(window.wp.blocks, window.wp.editor, window.wp.element);
