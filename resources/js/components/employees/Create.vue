<template>
    <div>
        <div class="row">
    <div class="card">
    <div class="card-header">
    <div class="float-end">
                <router-link :to="{ name: 'EmployeesIndex' }">Back</router-link>
            </div>
    </div>
        <div class="card-body">
            <h4 class="card-title">Create Employees</h4>
                <form>
                    <div class="form-group row">
                        <label for="first_name" class="col-md-4 col-form-label text-md-right">First Name</label>

                        <div class="col-md-6">
                            <input id="first_name" type="text" class="form-control" required>
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="middle_name" class="col-md-4 col-form-label text-md-right">Middle Name</label>

                        <div class="col-md-6">
                            <input id="middle_name" type="text" class="form-control" required>
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="last_name" class="col-md-4 col-form-label text-md-right">Last Name</label>

                        <div class="col-md-6">
                            <input id="last_name" type="text" class="form-control" required>
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>

                        <div class="col-md-6">
                            <input id="address" type="text" class="form-control" required>
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="country"
                            class="col-md-4 col-form-label text-md-right">Country</label>

                        <div class="col-md-6">
                            <select name="country" class="form-control" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        
                                            <option value=""></option>
                                        
                                    </select>
                                    
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="state"
                            class="col-md-4 col-form-label text-md-right">State</label>

                        <div class="col-md-6">
                            <select name="state" class="form-control" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        
                                            <option value=""></option>
                                        
                                    </select>
                                    
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="department"
                            class="col-md-4 col-form-label text-md-right">Department</label>

                        <div class="col-md-6">
                            <select name="department" class="form-control" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        
                                            <option value=""></option>
                                        
                                    </select>
                                    
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="city"
                            class="col-md-4 col-form-label text-md-right">city</label>

                        <div class="col-md-6">
                            <select name="city" class="form-control" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        
                                            <option value=""></option>
                                        
                                    </select>
                                    
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="zip_code" class="col-md-4 col-form-label text-md-right">Zip Code</label>

                        <div class="col-md-6">
                            <input id="zip_code" type="text" class="form-control" required>
                            
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
    
        </div>
    </div>
    </div>
    <!-- end col -->
</div>
    
</template>

<script>
export default {

}
</script>

<style>

</style>