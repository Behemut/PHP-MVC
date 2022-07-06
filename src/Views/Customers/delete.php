<?php
include   "../Ejercicio4/src/Views/plantilla.php";
?>
<div class="pb-5 w-full h-full">
    <h1 class="text-3xl text-center pt-10 font-bold   text-slate-100    ">Eliminar</h1>
    <p class="text-center text-2xl text-slate-100 " >¿Esta seguro que desea eliminar este registro?</p>

    <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" class="bg-slate-300 w-1/2 mx-auto p-5 rounded-lg mb-5">
        <div class="w-full">
            <input type="hidden" name="id" value="<?php echo $customers['codigo'] ?>">
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-slate-600">Nombre</label>
                <input class="border py-2 px-3 text-grey-darkest" type="text" name="nombre" value="<?php echo $customers['nombre'] ?>" disabled>
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-slate-600">Apellido</label>
                <input class="border py-2 px-3 text-grey-darkest" type="text" name="dui" value="<?php echo $customers['dui'] ?>" disabled>
            </div>

            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-slate-600">Descripcion del plan</label>
                <input class="border py-2 px-3 text-grey-darkest" type="text" name="dui" value="<?php echo $plans['descripcion'] ?>" disabled>
            </div>


            <input class="block bg-red-600   text-slate-50 uppercase text-lg mx-auto p-4 rounded font-bold" type="submit" value="Eliminar">
        </div>
    </form>
</div>
</body>

</html>