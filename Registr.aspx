<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Registr.aspx.cs" Inherits="WebSite.Registr" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <style type="text/css">
        .style1
        {
            background-image: url('pic/fon.jpg');
        }
        .style2
        {
            width: 5px;
        }
        .style3
        {
            height: 42px;
        }
    </style>
</head>
<body class="style1">
    <form id="form1" runat="server">
    <div>
    <asp:ValidationSummary ID="ValidationSummary1" runat="server" ForeColor="Red" Style="text-align: center" />
        <table align="center">
            <tr>
                <td class="style4" align="right">
                    <asp:Label ID="Label1" runat="server" Text="Логин"></asp:Label>
                </td>
                <td class="style4" colspan="2">
                    <asp:TextBox ID="TextBox1" runat="server" Text=""></asp:TextBox>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ControlToValidate="TextBox1"
                        ErrorMessage="Укажите логин" ForeColor="Red" Display="Dynamic">*</asp:RequiredFieldValidator>
                    <asp:CustomValidator ID="CustomValidator1" runat="server" ControlToValidate="TextBox1"
                        ErrorMessage="Такое имя или E-mail  уже существуют" ForeColor="Red" 
                        OnServerValidate="CustomValidator1_ServerValidate" Display="Dynamic">Такое имя уже существует</asp:CustomValidator>
                </td>
            </tr>
            <tr>
                <td style="text-align: right" class="style4">
                    <asp:Label ID="Label2" runat="server" Text="Пароль"></asp:Label>
                </td>
                <td style="text-align: left" class="style6" colspan="2">
                    <asp:TextBox ID="TextBox2" runat="server" TextMode="Password"></asp:TextBox>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" ControlToValidate="TextBox2"
                        ErrorMessage="Укажите пароль" ForeColor="Red">*</asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td class="style3" style="text-align: right">
                    <asp:Label ID="Label3" runat="server" Text="Повторите пароль"></asp:Label>
                </td>
                <td class="style3" style="text-align: left" colspan="2">
                    <asp:TextBox ID="TextBox3" runat="server" TextMode="Password"></asp:TextBox>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" ControlToValidate="TextBox3"
                        ErrorMessage="Укажите пароль еще раз" ForeColor="Red">*</asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td class="style3" style="text-align: right">
                    <asp:Label ID="Label5" runat="server" Text="Введите e-mail:"></asp:Label>
                </td>
                <td class="style3" style="text-align: left" colspan="2">
                    <asp:TextBox ID="TextBox4" runat="server" TextMode="SingleLine"></asp:TextBox>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator5" runat="server" ControlToValidate="TextBox4"
                        ErrorMessage="Укажите E-mail" ForeColor="Red">*</asp:RequiredFieldValidator>
                    <asp:RegularExpressionValidator ID="RegularExpressionValidator1" runat="server" ControlToValidate="TextBox4"
                        ErrorMessage="E-mail введен некорректно" ForeColor="Red" 
                        ValidationExpression="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*" 
                        Display="Dynamic"></asp:RegularExpressionValidator>
                </td>
            </tr>
            <tr>
                <td class="style5" style="text-align: right">
                    <asp:Label ID="Label4" runat="server" Text="Ваш пол"></asp:Label>
                </td>
                <td style="text-align: left" class="style2">
                    <asp:RadioButtonList ID="RadioButtonList1" runat="server" Height="16px" Width="95px">
                        <asp:ListItem>Мужской</asp:ListItem>
                        <asp:ListItem>Женский</asp:ListItem>
                    </asp:RadioButtonList>
                </td>
                <td style="text-align: left">
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator4" runat="server" ControlToValidate="RadioButtonList1"
                        ErrorMessage="Выберете пол" ForeColor="Red">*</asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td class="style4">
                    &nbsp;
                </td>
                <td style="text-align: left" class="style6" colspan="2">
                    <asp:Button ID="Button1" runat="server" Text="Регистрация" 
                        onclick="Button1_Click" />
                    
                </td>
            </tr>
        </table>
        <asp:GridView ID="GridView1" runat="server">
        </asp:GridView>
    </div>
    </form>
</body>
</html>
