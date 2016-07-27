
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Access Control</h4>
                        </div>
                        <div class="content table-responsive table-full-width">

                            <table class="table table-hover table-striped">
                                <thead>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                </thead>
                                <thead>
                                <th>ID</th>
                                <th>Username</th>
                                <th width="5%">&nbsp</th>
                                <th width="5%">&nbsp;</th>
                                </thead>
                                <tbody>

                                <form action="/user/add_exec" method="post">
                                    <input type="hidden" name="id" value="0">

                                    <tr>
                                        <td>?</td>
                                        <td><input type="email" value="" name="username" required="true"></td>
                                        <td>

                                            <button type="submit" class="btn btn-secondary">
                                                Submit
                                            </button>
                                        </td>
                                        <td>&nbsp;</td>
                                    </tr>

                                </form>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

