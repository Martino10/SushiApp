let checkbox = document.getElementsByTagName('input');
let list_of_cards = document.getElementsByTagName('li');
let kinds_array = ['Maki', 'Nigiri', 'Sashimi', 'Temaki', 'Uramaki'];

for (let i = 0; i < kinds_array.length; i++) {
    checkbox[i].addEventListener('change', function() {
        if (!checkbox[i].checked) {
            for(let j = 0; j < list_of_cards.length; j++) {
                if (list_of_cards[j].dataset.kindOfSushi === kinds_array[i]) {
                    list_of_cards[j].style.display = 'none';
                }
            }
        }
        else {
            for(let j = 0; j < list_of_cards.length; j++) {
                if (list_of_cards[j].dataset.kindOfSushi === kinds_array[i]) {
                    list_of_cards[j].style.display = '';
                }
            }
        }
    })
}

