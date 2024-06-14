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
      return el(
        'div',
        { className: props.className },
        el(editor.RichText, {
          tagName: 'h2',
          className: 'rmbt-history-card-title',
          value: props.attributes.title,
          onChange: function (content) {
            props.setAttributes({ title: content });
          },
        }),
        el(editor.RichText, {
          tagName: 'div',
          className: 'rmbt-history-card-text',
          value: props.attributes.content,
          onChange: function (content) {
            props.setAttributes({ content: content });
          },
        })
      );
    },
    save: function (props) {
      return el(
        'div',
        { className: props.className },
        el(editor.RichText.content, {
          tagName: 'h2',
          className: 'rmbt-history-card-title',
          value: props.attributes.title,
        }),
        el(editor.RichText.content, {
          tagName: 'div',
          className: 'rmbt-history-card-text',
          value: props.attributes.content,
        })
      );
    },
  });
})(window.wp.blocks, window.wp.editor, window.wp.element);
