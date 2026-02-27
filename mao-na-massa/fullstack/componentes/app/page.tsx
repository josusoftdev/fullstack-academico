'use client'; //obrigatório para usar hooks
import {useState} from 'react';
import {Button} from './components/ui/button';
import {Card, CardHeader, CardContent} from './components/ui/card';
import {User, Image as ImageIcon, Save} from 'lucide-react';

interface UserProfile{
  name: string;
  role: string;
  avatarUrl: string;
}

export default function PerfilPage(){
  //criar o estado
  const [profile, setProfile] = useState<UserProfile>({
    name: 'Seu nome', 
    role: 'Sua Profissão', 
    avatarUrl: 'https://github.com/github.png'});

  //evento de onchange
  const handleChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    const {name, value} = e.target;
    setProfile((prevState) => (
      {...prevState, //copia tudo que já existia no estado
        [name]: value //sobrescreve apenas o campo que foi alterado

      }
    ))
  };

  //onsubmit
  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault(); //evita erros de submissão
    alert('Perfil salvo com sucesso!');
  };

  return (
    <div>
      {/*Montar o formulário*/}
      <Card>
        <CardHeader title="Editor de Perfil"
        description="Altere as informações abaixo:"/>
        <CardContent>
          <form onSubmit={handleSubmit}>
            <label>Nome Completo</label>
            <input name="name" value={profile.name} onChange={handleChange}/>

            <label>Profissão</label>
            <input name="role" value={profile.role} onChange={handleChange}/>

            <label>URL da Foto</label>
            <input name="avatarUrl" value={profile.avatarUrl} onChange={handleChange}/>

            <Button type="submit" icon={<Save size={18}/>}>
              Salvar Perfil
            </Button>
          </form>
        </CardContent>
      </Card>
    </div>
  );
}