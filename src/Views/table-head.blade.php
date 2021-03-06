<thead>
<tr>
    @foreach($labels as $index => $label)
        <th>{{ $label }} {!! $model::renderSortingButtons($columns[$index], $prefix) !!}</th>
    @endforeach
    <th></th>
</tr>
</thead>
{!! $filterRow !!}
<script>
    (function () {
        var parent = document.scripts[document.scripts.length - 1].parentNode.parentNode;
        var forms = parent.getElementsByTagName('form');
        var form = forms[forms.length - 1];
        var sortingButtons = parent.querySelectorAll('button[name="{{ $prefix }}_sorting"]');
        for(var i = 0; i < sortingButtons.length; i++) {
            (function () {
                var button = sortingButtons[i];
                button.addEventListener('click', function() {
                    var sortingHidden = document.getElementById('{{ $prefix }}_sorting');
                    if(!sortingHidden) {
                        sortingHidden = document.createElement('input');
                        sortingHidden.type = 'hidden';
                        sortingHidden.name = button.name;
                        form.append(sortingHidden);
                    }
                    sortingHidden.value = button.value;
                    form.querySelectorAll('#{{ $prefix }}_submit_filter')[0].click();
                });
            })();
        }
    })();
</script>