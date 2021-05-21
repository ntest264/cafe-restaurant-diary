@if (count($shops) > 0)
    <ul class="list-unstyled">
        @foreach ($shops as $shop)
                    <div>
                        {{-- お店情報内容 --}}
                        <p class="mb-0">{!! nl2br(e($shop->content)) !!}</p>
                    </div>
                     <div>
                        @if (Auth::id() == $shop->user_id)
                            {{-- 登録内容削除ボタンのフォーム --}}
                            {!! Form::open(['route' => ['shops.destroy', $shop->id], 'method' => 'delete']) !!}
                                {!! Form::submit('削除する', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        @endif
                    </div>
                </div>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $shops->links() }}
@endif