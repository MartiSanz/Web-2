<!-- formulario de edicion de producto 
<form action="CAMBIAR" method="POST" class="my-4"> -->

<!-- formulario de alta de producto -->
<form action="CAMBIAR" method="POST" class="my-4">
    <div class="mb-3">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" value="{$subject->name}">
    </div>
    <div class="mb-3">
        <label for="year">Year</label>
        <input type="number" class="form-control" name="year" value="{$subject->year}">
    </div>
    <div class="mb-3">
        <label for="semester">Semester</label>
        <input type="number" class="form-control" name="semester" id="" value="{$subject->semester}">
        </div>
    <div class="mb-3">
        <label for="career">Career</label>
        <select class="form-control" name="career" id="">
            {foreach from=$careersData item=$career}
                <option value="{$career->id}">{$career->name}</option>
            {/foreach}}
        </select>
    </div>

    <button class="btn" type="submit">Submit</button>
</form>