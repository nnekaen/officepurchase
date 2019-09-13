function addRow() {
    var tbody = document.querySelector('tbody');
    
    var generateColumn = function (htmlString, className) {
        var td = document.createElement('td');
        td.innerHTML = htmlString;
        
        if (className) {
            td.className = className;
        }
        
        return td;
    }
    
    var length = (tbody.querySelectorAll('tr') || []).length;
    var id = 'row-' + (length + 1);
    
    var row = document.createElement('tr');
    row.id = id;
    row.appendChild(generateColumn('<input class="input-no-border" type="text" placeholder="Add item name"/>'));
    row.appendChild(generateColumn('<input class="input-no-border text-center quantity" min="0" type="number" oninput="calculateSum(this, \'#' + id + '\')" value="0"/>'));
    row.appendChild(generateColumn('<input class="input-no-border text-right price" min="0" type="number" oninput="calculateSum(this,\'#' + id + '\')" value="0"/>'));
    row.appendChild(generateColumn('<span class="sum">0</span>', 'text-right'));
    row.appendChild(generateColumn('<button class="button-error pure-button color-white" onclick="deleteRow(\'' + id + '\')">Delete</button>', 'text-right'));
    
    tbody.appendChild(row);
}

/*
*/
function deleteRow(id) {
    var tbody = document.querySelector('tbody');
    var row = document.getElementById(id);
    if (row){
        tbody.removeChild(row);
    }
 
}

function calculateSum(event,id) {
    if (!event.value){
        event.value = 0;        
    }
    
    var quantity = document.querySelector(id + ' .quantity');
    var price = document.querySelector(id + ' .price');
    var sum = document.querySelector(id + ' .sum');
    
    if (!quantity || !price || !sum) {
       return; 
    }
    
    sum.innerHTML = price.value * quantity.value;    
    
    var total = document.querySelector('.total');
    var sums = document.querySelectorAll('.sum');
    total.innerHTML = 0;
    
    for (var i = 0; i < sums.length; i += 1) {
        total.innerHTML = parseFloat(total.innerHTML)+ parseFloat(sums[i].innerHTML);
    }
    
    /*sums.forEach(function(e) {
        total += parse.float(e.innerHTML);
    });*/
    
    
    
    
}