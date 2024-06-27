<div class="writing-place">
    <textarea class="writing-place__textarea" placeholder="ابدأ الكتابة أو قم بسحب وإفلات صورة إلى هنا" name="content"></textarea>
    @error('content')
        <div class="validation-message">{{ $message }}</div>
    @enderror
    <div class="writing-place__submit-wrapper">
        {{ $slot }}
        <span><input type="checkbox" name="unknown"> مجهول</span>
    </div>
</div>
