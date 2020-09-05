<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    @include('layouts.partials.c-sidebar-brand')
    <ul class="c-sidebar-nav">
        @section('c-sidebar-nav')
            <li class="c-sidebar-nav-title">Nav Title</li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="#">
                    <i class="c-sidebar-nav-icon cil-speedometer"></i> Nav item
                </a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="#">
                    <i class="c-sidebar-nav-icon cil-speedometer"></i> With badge
                    <span class="badge badge-primary">NEW</span>
                </a>
            </li>
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#"><i class="c-sidebar-nav-icon cil-folder"></i> Dropdown</a>
                <ul class="c-sidebar-nav-dropdown-items">

                    <li class="c-sidebar-nav-dropdown">
                        <a class="c-sidebar-nav-dropdown-toggle" href="#">
                            <i class="c-sidebar-nav-icon cil-euro"></i>Invoicing</a>

                        <ul class="c-sidebar-nav-dropdown-items">
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link c-active" href="apps/invoicing/invoice.html"> Invoice<span class="badge badge-danger">PRO</span></a>
                            </li>
                        </ul>
                    </li>

                    <li class="c-sidebar-nav-dropdown">
                        <a class="c-sidebar-nav-dropdown-toggle" href="#"><i class="c-sidebar-nav-icon cil-envelope-open"></i>Email</a>
                        <ul class="c-sidebar-nav-dropdown-items">
                            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="apps/email/inbox.html" target="_top"> Inbox<span class="badge badge-danger">PRO</span></a></li>
                            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="apps/email/message.html" target="_top"> Message<span class="badge badge-danger">PRO</span></a></li>
                            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="apps/email/compose.html" target="_top"> Compose<span class="badge badge-danger">PRO</span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="c-sidebar-nav-item mt-auto">
                <a class="c-sidebar-nav-link c-sidebar-nav-link-success" href="https://coreui.io">
                    <i class="c-sidebar-nav-icon cil-cloud-download"></i> Download CoreUI</a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link c-sidebar-nav-link-danger" href="https://coreui.io/pro/">
                    <i class="c-sidebar-nav-icon cil-layers"></i> Try CoreUI
                    <strong>PRO</strong>
                </a>
            </li>
        @show

        @if(\Illuminate\Support\Str::lower(config('app.env')) == 'local')
                <li class="c-sidebar-nav-dropdown mt-auto">
                    <a class="c-sidebar-nav-dropdown-toggle c-sidebar-nav-link-info" href="#"><i class="c-sidebar-nav-icon cil-folder"></i> CoreUI</a>
                    <ul class="c-sidebar-nav-dropdown-items">
                        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link c-sidebar-nav-link-info" href="https://coreui.io/demo/" target="_blank"><i class="c-sidebar-nav-icon cil-layers"></i> Preview</a></li>
                        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link c-sidebar-nav-link-info" href="https://coreui.io/docs/" target="_blank"><i class="c-sidebar-nav-icon cil-layers"></i> Documentation</a></li>
                    </ul>
                </li>
        @endif

    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
            data-class="c-sidebar-minimized"></button>
</div>
