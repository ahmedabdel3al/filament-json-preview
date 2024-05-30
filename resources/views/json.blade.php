@php
    $id = $getId();
@endphp

<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
    <div wire:ignore id="{{$id}}"></div>
</x-dynamic-component>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        // create the editor
        let container = document.getElementById('{{$id}}')

        let editor = new JSONEditor(container, @json($entry->getOptions()))
        // set json
        let initialJson = JSON.parse('@json($getState() ?: [])')
        editor.set(initialJson)

        // get json
        var updatedJson = editor.get()
    });

</script>
