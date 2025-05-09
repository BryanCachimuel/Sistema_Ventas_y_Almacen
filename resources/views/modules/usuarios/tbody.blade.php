@foreach ($items as $item)
<tr>
  <td class="text-center">{{ $item->email }}</td>
  <td class="text-center">{{ $item->name }}</td>
  <td class="text-center">
    @if ($item->rol == 'admin')
        Administrador
    @else
        Cajero
    @endif
  </td>
  <td class="text-center">
    <a href="" onclick="agregar_id_usuario({{ $item->id }})" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#cambiar_password">
      <i class="fa-solid fa-user-lock"></i>
    </a>
  </td>
  <td class="text-center">
    <div class="form-check form-switch">
      <input class="form-check-input" type="checkbox" role="switch" id="{{ $item->id }}"
      {{ $item->activo ? 'checked' : '' }}>
    </div>
  </td>
  <td class="text-center">
    <a href="{{ route("usuarios.edit", $item->id) }}" class="btn btn-outline-warning"><i class="fa-solid fa-user-pen"></i></a>
    <a href="{{ route("usuarios.show", $item->id) }}" class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></a>
  </td>
</tr>
@endforeach