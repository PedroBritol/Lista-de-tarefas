
    function drag(ev){
        ev.dataTransfer.setData("text/plain", ev.target.id);
    }

    function allowDrop(ev){
        ev.preventDefault();
    }
    function drop(ev){
        const listaEl = document.querySelector('#lista');
        console.log("lista:")
        console.log(listaEl);
        const targetEl = ev.target

        const id = ev.dataTransfer.getData("text/plain");
        const draggingEl = document.getElementById(id);

        const listaItens = Array.from(listaEl.children);
        const draggedIndex = listaItens.indexOf(draggingEl);
        const droppedIndex = listaItens.indexOf(targetEl);

        if(draggedIndex > droppedIndex){
            targetEl.parentNode.insertAdjacentElement('beforebegin', draggingEl)
        }

        if(droppedIndex > draggedIndex){
            targetEl.parentNode.insertAdjacentElement('afterend', draggingEl)
        }
    }
