<div class="login-menu">
    <ul>
        <li>
            <a href="{{route('template.registration')}}" id="registration" data-modal>
                Register account
            </a>
        </li>
        <li>
            <a href="{{route('template.restore')}}" id="restore" data-modal>
                Restore account
            </a>
        </li>
        <li>
            <a href="{{route('template.verification')}}" id="verification" data-modal>
                Verification
            </a>
        </li>
        <li>
            <a href="{{route('template.developers')}}" id="developers" data-modal>
                Developers
            </a>
        </li>
        <li>
            <a href="{{route('template.records')}}" id="records" data-modal>
                Event records
            </a>
        </li>
    </ul>
</div>
@push('scripts')
    <script>
        $('a[data-modal]').click(function () {
            $('.login').hide();
            $('.login-menu').hide();
            $(this).modal({
                modalClass: $(this).attr('id'),
                showClose: false,
            });
            return false;
        });
        $(function() {
            $(document).on($.modal.CLOSE, function () {
                $('.login').show();
                $('.login-menu').show();
            });
        });
    </script>
@endpush
