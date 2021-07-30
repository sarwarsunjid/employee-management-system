<template>
  <div>



<div class="row">
    <div>

            <div class="alert alert-success">
            </div>

    </div>
    <div class="card">
        <div class="card-header">
            <form >
                <div class="float-start">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control rounded" 
                        placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" >
                        <button type="submit" class="btn btn-outline-primary">search</button>   
                </div>
                </div>
            </form>
            <div class="float-end">
                <router-link :to="{ name: 'EmployeesCreate' }">Create Employee</router-link>
                <!-- <a href="">Create Country</a> -->
            </div>
            </div>
                
        </div>
        <div class="card-body">
            <h4 class="card-title">User List</h4>
            <div class="table-responsive">
                <table class="table table-bordered mb-0">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Country Code</th>
                            <th>Name</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="" class="btn btn-success">Edit</a>
                                </td>
                            </tr>
                       
                    </tbody>
                </table>
            </div>
    </div>
</div>
</div>


</template>

<script>
export default {

}
</script>

<style>

</style>