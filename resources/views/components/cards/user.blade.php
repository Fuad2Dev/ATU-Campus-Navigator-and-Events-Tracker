@props(['user', 'association' => [], 'name', 'id', 'role', 'editable' => false, 'hasCoAdmin', 'isCoAdmin' => false])
<div class="d-flex container col border p-2 m-auto my-2">
    <div class="pr-2">
        <div class="p-0 d-flex align-items-center justify-content-center border rounded-circle"
            style="height: 75.5px; width: 75.5px; overflow: hidden;">
            <i class="fas fa-user fa-3x"></i>
        </div>
    </div>
    <div class="col col-md-7 d-flex justify-content-end flex-column position-relative">

        <strong>{{ $user->last_name }}</strong>
        <div class="d-flex justify-content-between">
            <small># {{ $user->id }}</small>
            @if ($role != '')
                <em>~{{ $role }}</em>
            @endif
        </div>

        @if ($editable)
            @switch($association->myRoleId())
                @case(1)
                    @if ($hasCoAdmin)
                        @if ($isCoAdmin)
                            <div class="mb-2 dropstart position-absolute top-0 end-0">
                                <button type="button" class="btn btn-floating btn-primary" data-mdb-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fas fa-certificate"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li class="bg-info"><a
                                            class="dropdown-item text-white"
                                            href="{{ route('association.demote', compact('association', 'user')) }}"><i
                                                class="bi bi-arrow-down-circle"></i> Demote</a></li>
                                    <li class="bg-danger"><a class="dropdown-item text-white" href="#"><i
                                                class="fas fa-user-minus"></i> remove</a></li>
                                </ul>
                            </div>
                        @else
                            <div class="mb-2 dropstart position-absolute top-0 end-0">
                                <button type="button" class="btn btn-floating btn-primary" data-mdb-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fas fa-certificate"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li class="bg-gray"><a
                                            class="dropdown-item disabled"
                                            href="{{ route('association.promote', compact('association', 'user')) }}"><i
                                                class="bi bi-arrow-up-circle"></i> Promote</a></li>
                                    <li class="bg-danger"><a class="dropdown-item text-white" href="#"><i
                                                class="fas fa-user-minus"></i> remove</a></li>
                                </ul>
                            </div>
                        @endif
                    @else
                        <div class="mb-2 dropstart position-absolute top-0 end-0">
                            <button type="button" class="btn btn-floating btn-primary" data-mdb-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fas fa-certificate"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li class="bg-success"><a
                                        class="dropdown-item text-white"
                                        href="{{ route('association.promote', compact('association', 'user')) }}"><i
                                            class="bi bi-arrow-up-circle"></i> Promote</a></li>
                                <li class="bg-danger"><a class="dropdown-item text-white" href="#"><i
                                            class="fas fa-user-minus"></i> remove</a></li>
                            </ul>
                        </div>
                    @endif
                @break

                @case(2)
                    <div class="btn btn-primary btn-floating position-absolute top-0 end-0">
                        <i class="fas fa-certificate"></i>
                    </div>
                @break

                @default
            @endswitch
        @endif
    </div>

</div>
