<div class="mt-10">
    @if ($show)
        <form action="{{ secure_url(route('idea.comments.create', $idea->id)) }}" method="post">
            @csrf
            <div class="mb-3">
                <textarea name="comment" class="fs-6 form-control" rows="1" placeholder="Write Comment"></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="bg-blue-600 text-white p-3 w-fit rounded-lg text-lg"> Post Comment
                </button>
            </div>

        </form>
        <hr>


        @foreach ($idea->comments as $comment)
            <div class="flex items-start justify-between w-full">
                <img style="width:35px" class="me-2 rounded-full"
                    src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi" alt="Luigi Avatar">
                <div class="w-full">
                    <div class="flex justify-between items-center w-full">
                        <h6 class="font-bold">Luigi
                        </h6>
                        <small class="fw-light text-slate-600 font-semibold"> {{ $comment['created_at'] }}</small>
                    </div>
                    <p class="mt-3 text-slate-700">
                        {{ $comment['comment'] }}
                    </p>
                </div>
            </div>
        @endforeach

    @endif
</div>
