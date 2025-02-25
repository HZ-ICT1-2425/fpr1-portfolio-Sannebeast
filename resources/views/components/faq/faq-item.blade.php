<style>
    body { font-family: Arial, Helvetica, sans-serif; }

    /* FAQ Styling */
    .faq-item {
        padding: 10px;
    }

    /* When checkbox is checked, change "+" to "-" */
    .checkbox:checked + .faq-label::after {
        content: "-";
        transform: rotate(180deg);
    }

    .faq-content {
        padding: 0 10px;
        line-height: 26px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.5s;
    }

    .checkbox:checked ~ .faq-content {
        max-height: 300px; /* Adjust this height according to your content */
        padding: 10px;
    }

</style>

<div class="faq-item">
    <input class="checkbox" type="checkbox" id="faq-{{ $faq->id }}" name="accordion">
    <label for="faq-{{ $faq->id }}">{!! $faq->question !!}</label>
    <div class="faq-content">
        <p>{!! $faq->answer !!}</p>
        <div>
            <a href="{{ route('faq.edit', $faq->id) }}" class="button is-primary">Edit</a>
            <button id="deleteBtn{{ $faq->id }}" class="button">Delete</button>
            <div id="deleteModal{{ $faq->id }}" class="modal">
                <div class="modal-content">
                    <span class="close closeBtn" data-id="{{ $faq->id }}">&times;</span>
                    <p class="has-text-centered">ARE YOU SURE YOU WANT TO DELETE????????</p>
                    <div class="level">
                        <form action="{{ route('faq.delete', $faq->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button is-danger">Delete</button>
                        </form>
                        <button class="button is-primary closeBtn" data-id="{{ $faq->id }}">NO</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
