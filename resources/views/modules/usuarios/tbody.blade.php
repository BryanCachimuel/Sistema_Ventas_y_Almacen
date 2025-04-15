@foreach ($items as $item)
<tr class="text-center">
  <td>{{ $item->email }}</td>
  <td>{{ $item->name }}</td>
  <td>
    @if ($item->rol == 'admin')
        Administrador
    @else
        Cajero
    @endif
  </td>
  <td>
    <a href="" onclick="agregar_id_usuario({{ $item->id }})" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#cambiar_password">
      <i class="fa-solid fa-user-lock"></i>
    </a>
  </td>
  <td>
    <div class="form-check form-switch">
      <input class="form-check-input" type="checkbox" role="switch" id="{{ $item->id }}"
      {{ $item->activo ? 'checked' : '' }}>
    </div>
  </td>
  <td>
    <a href="{{ route("usuarios.edit", $item->id) }}" class="btn btn-warning"><i class="fa-solid fa-user-pen"></i></a>
  </td>
</tr>
@endforeach