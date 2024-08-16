<div wire:ignore>
    <div id="{{ $quillId }}"></div>
</div>

@script
<script>
    const quill = new Quill('#' + @js($quillId), {
        modules: {
            toolbar: [
                [{
                    header: [1, 2, 3, 4, 5, 6, !1]
                }],
                [{
                    font: []
                }],
                ["bold", "italic", "underline", "strike"],
                [{
                    size: ["small", !1, "large", "huge"]
                }],
                [{
                    list: "ordered"
                }, {
                    list: "bullet"
                }],
                [{
                    color: []
                }, {
                    background: []
                }, {
                    align: []
                }],
                ["link", "image", "code-block", "video"]
            ]
        },
        theme: @js($theme)
    });

    quill.root.innerHTML = $wire.get('value');

    quill.on('text-change', function() {
        let value = quill.root.innerHTML;
        @this.set('value', value);
    });
</script>
@endscript