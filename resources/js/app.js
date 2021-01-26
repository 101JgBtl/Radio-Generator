require('./bootstrap');

document.addEventListener('DOMContentLoaded', () => {
    if (typeof(document.getElementById('add_unit')) !== 'undefined') {
        const frequency_table = new FrequencyTable(document.getElementById('unit_table'))


        document.getElementById('add_unit').addEventListener('click', () => {
            frequency_table.add_row();
        });
    }
})

class FrequencyTable {
    constructor(dom_root) {
        this.dom_root = dom_root;

        this.init();
    }

    init() {
        this.dom_table = document.createElement('table');
        this.dom_root.append(this.dom_table);

        this.dom_table.classList.add('table');

        const header = this.dom_table.createTHead();
        const header_row = header.insertRow(0);
        ['Callsign', 'Type of Radio', ''].forEach((el, i) => header_row.insertCell(i).innerText = el);

        this.body = this.dom_table.createTBody();

        this.add_row();
    }

    add_row() {
        if (this.body.childElementCount >= 10) {
            return;
        }

        const row = this.body.insertRow(this.body.childElementCount);

        const col_callsign = row.insertCell(0);

        const callsign_input = document.createElement('input');
        callsign_input.name = 'units[' + this.body.childElementCount + '][callsign]';
        callsign_input.classList.add('form-control');
        callsign_input.required = true;

        col_callsign.append(callsign_input);

        const col_radio_type = row.insertCell(1);
        const radio_type_select = document.createElement('select');
        col_radio_type.append(radio_type_select);

        radio_type_select.name = 'units[' + this.body.childElementCount + '][radio_type]';
        radio_type_select.classList.add('form-control');
        [
            {value: 'short_range', text: 'Short Range'},
            {value: 'long_range', text: 'Long Range'}
        ].forEach(el => {
            radio_type_select.append(new Option( el.text, el.value));
        });

        const col_delete = row.insertCell(2);

        col_delete.classList.add('text-right');

        const button_delete = document.createElement('button');
        button_delete.classList.add('btn', 'btn-danger');
        button_delete.innerText = 'Delete';
        col_delete.append(button_delete);

        button_delete.addEventListener('click', () => {
            row.remove();
        });
    }
}
