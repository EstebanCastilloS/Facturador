<div class="box-body row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <label for="student_id">Estudiante</label>
        <div class="select">
            <select id="student_id" name="student_id" class="form-control selectpicker" data-live-search="true" required>
                <option {{ ($qualification->student_id ?? '') == '' ? "selected" : "" }} disabled>Seleccionar Estudiante</option>
                @foreach($students as $student)
                    @if($student->id == ($qualification->student_id ?? ''))
                        <option value="{{ $student->id }}" selected>{{ $student->name }}</option>
                    @else
                        <option value="{{ $student->id }}">{{ $student->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="subject">Nombre de la Materia</label>
            <input type="text" name="subject" class="form-control" value="{{ old('subject', $qualification->subject ?? '') }}" placeholder="Nombre de la Materia">
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="grade">Calificación</label>
            <input type="text" name="grade" class="form-control" value="{{ old('grade', $qualification->grade ?? '') }}" placeholder="Calificación">
        </div>
    </div>


    <div class="form-group">
        <button class="btn btn-celeste btn-md" type="submit"><i class="fa fa-save"></i>&nbsp; Guardar</button>
        <a href="{{url('qualification')}}" class="btn btn-gris btn-md"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
    </div>
</div>
