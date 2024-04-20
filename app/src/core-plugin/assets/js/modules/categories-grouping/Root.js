export class Root {


    constructor() {}



    addClassToBlocks(objBlocks) {
        Object.entries(objBlocks).forEach(([name, node]) => {
            processNode.call(this, name, node);
        });

        function processNode(name, node) {
            if (node instanceof Element) {
                node.classList.add(this.genCssClassName(name));
            } else if (typeof node === 'object' && node !== null) {
                Object.entries(node).forEach(([childName, childNode]) => {
                    processNode(childName, childNode);
                });
            }
        }
    }

    /**
     * преобразует строку формат в CSS класса
     *
     */
    genCssClassName(str) {
        let result = '';

        for (let i = 0; i < str.length; i++) {
            const char = str[i];
            if (char.toUpperCase() === char) {
                result += `-${char.toLowerCase()}`;
            } else {
                result += char;
            }
        }

        // console.log(result);

        return result;
    }


}