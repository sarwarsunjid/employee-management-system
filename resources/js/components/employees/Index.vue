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
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Address</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr
                                v-for="employee in employees"
                                :key="employee.id"
                            >
                                <th scope="row">#{{ employee.id }}</th>
                                <td>{{ employee.first_name }}</td>
                                <td>{{ employee.last_name }}</td>
                                <td>{{ employee.address }}</td>
                                <td>{{ employee.department.name }}</td>
                                <td>
                                    <router-link
                                        :to="{
                                            name: 'EmployeesEdit',
                                            params: { id: employee.id }
                                        }"
                                        class="btn btn-success"
                                        >Edit</router-link
                                    >
                                    <button
                                        class="btn btn-danger"
                                        @click="deleteEmployee(employee.id)"
                                    >
                                        Delete
                                    </button>
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
    data() {
        return {
            employees: []
        }
    },
    created() {
        this.getEmployees();
    },
    methods: {
        getEmployees() {
            axios
                .get("/api/employees")
                .then(res => {
                    this.employees = res.data.data
                })
                .catch(error => {
                    console.log(error)
                })
        },
        deleteEmployee(id) {
            axios.delete("api/employees/" + id).then(res => {
                this.showMessage = true;
                this.message = res.data;
                this.getEmployees();
            });
        }
    }
};


</script>

<style>

</style>